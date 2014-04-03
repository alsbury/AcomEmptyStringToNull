AcomEmtyStringToNull
====================

Zend Framework 1 filter that will convert an empty string into a null value. String trim along with other filters will convert a null value to an empty string.  Sometimes you really want a null value.

Example Usage Form
------------------
    <?php

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
