<?php

// plugins/opSamplePlugin/apps/pc_frontend/modules/sample/actions/components.class.php

 class SampleComponents extends sfComponents
{
  public function executeSampleComponent(sfWebRequest $request)
  {
    $memberNews = Doctrine::getTable('MemberNews')->findOneByMemberId($this->getUser()->getMemberId());
    $this->form = new MemberNewsForm($memberNews);
  }
  public function executeSampleComponent2(sfWebRequest $request)
  {
   $this->memberNews = Doctrine::getTable('MemberNews')->findOneByMemberId($request->getParameter( 'id',  $this->getUser()->getMemberId()));
  }
}
