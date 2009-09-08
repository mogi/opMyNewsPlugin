<?php

class SampleActions extends sfActions
{
  public function executeIndex($request)
  {
    return sfView::SUCCESS;
  }

  public function executeUpdateNews($request)
  {
    // POSTリクエストかどうかを確認する
    if ($request->isMethod(sfRequest::POST))
    {
      // member_news から 自分のメンバーIDが一致する１行を取りだす
      $memberNews = Doctrine::getTable('MemberNews')->findOneByMemberId($this->getUser()->getMemberId());
      // 前回作成した memberNewsFormの初期値として先ほど取りだした1行をセットする
      $memberNewsForm = new MemberNewsForm($memberNews);
      // POSTされたパラメータを取得する
      $param = $request->getParameter('member_news');
      $param['member_id'] = $this->getUser()->getMember()->getId();
      // パラメータをバインドする
      $memberNewsForm->bind($param);
      // 入力された値が妥当かどうかを確かめる
      if ($memberNewsForm->isValid())
      {
        // データベースに保存
        $memberNewsForm->save();
      }
    }
    $this->redirect('@homepage');
  }
}
