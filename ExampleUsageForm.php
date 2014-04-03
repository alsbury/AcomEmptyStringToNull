<?php

/**
 * @author David Alsbury
 */
class ExampleUsageForm extends Zend_Form {
    public function init() {
        $this->addElement($this->createElement('text', 'id')
                ->setRequired(false)
                ->addFilter('StripTags')
                ->addFilter('StringTrim'));

        $this->addElement($this->createElement('text', 'parent_id')
                ->setRequired(false)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addFilter(new Acom_Filter_EmptyStringToNull));

        $this->addElement($this->createElement('text', 'display_name')
                ->setRequired(false)
                ->addFilter('StripTags')
                ->addFilter('StringTrim'));

    }

}
