<?php
namespace Concrete\Package\VividStore\src\VividStore\Promotion\PromotionRules;

use Core;
use \Concrete\Package\VividStore\Src\VividStore\Promotion\PromotionRuleTypeRule as StorePromotionRuleTypeRule;

/**
 * @Entity
 * @Table(name="VividStorePromotionSubtotalMinimumRule")
 */
class SubtotalMinimumPromotionRule extends StorePromotionRuleTypeRule
{
    public static function getByID($id)
    {
        // TODO: Implement getByID() method.
    }
    public function dashboardForm()
    {
        $this->set('form', Core::make("helper/form"));
    }
    public function addRule($data)
    {
        // TODO: Implement addRule() method.
    }
    public function update($data)
    {
        // TODO: Implement update() method.
    }
    public function cartMeetsRule()
    {
        // TODO: Implement cartMeetsRule() method.
    }
}
