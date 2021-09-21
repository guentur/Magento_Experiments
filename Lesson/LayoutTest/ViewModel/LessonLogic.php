<?php
/**
 * LessonLogic
 *
 */

namespace Lesson\LayoutTest\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class LessonLogic implements ArgumentInterface
{
    public function getSomeString()
    {
        return 'Some string. You are welcome';
    }
}
