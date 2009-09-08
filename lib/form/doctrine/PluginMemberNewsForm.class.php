<?php

/**
 * PluginMemberNews form.
 *
 * @package    form
 * @subpackage MemberNews
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
abstract class PluginMemberNewsForm extends BaseMemberNewsForm
{
  public function setup()
  {
    parent::setup();
    $this->setWidget('member_id', new sfWidgetFormInputHidden());
  }
}
