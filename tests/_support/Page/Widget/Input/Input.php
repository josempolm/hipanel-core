<?php
/**
 * HiPanel core package
 *
 * @link      https://hipanel.com/
 * @package   hipanel-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2019, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\tests\_support\Page\Widget\Input;

/**
 * Class Input.
 *
 * Represents text input element
 */
class Input extends TestableInput
{
    /**
     * @return string
     */
    protected function getSearchSelector(): string
    {
        return self::AS_BASE . "div[data-title='{$this->title}']>input";
    }

    /**
     * @return string
     */
    protected function getFilterSelector(): string
    {
        return self::TF_BASE . "input[name*={$this->auxName}]";
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->tester->clearField($this->selector);
        $this->tester->fillField($this->selector, $value);
    }
}
