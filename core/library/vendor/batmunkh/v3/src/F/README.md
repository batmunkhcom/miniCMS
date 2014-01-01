$form = new PFBC\Form("validation");
        $form->configure(array(
                //"prevent" => array("bootstrap", "jQuery")
        ));
        $form->addElement(new \F\PFBC\Element\Hidden("form", "validation"));
        $form->addElement(new \F\PFBC\Element\Textbox("Require:", "Required", array(
            "required" => 1,
            "longDesc" => "The required property provides a shortcut for applying the Required class to the element's validation property.  If supported, the HTML5 required attribute will also provide client-side validation."
        )));
        $form->addElement(new \F\PFBC\Element\Textbox("Regular Expression:", "RegularExpression", array(
            "validation" => new \F\PFBC\Validation\RegExp("/pfbc/", "Error: The %element% field must contain following keyword - \"pfbc\"."),
            "longDesc" => "The RegExp validation class provides the means to apply custom validation to an element.  Its constructor includes two parameters: the regular expression pattern to test and the error message to display if the pattern is not matched."
        )));
        $form->addElement(new \F\PFBC\Element\Email("Email:", "Email", array(
            "longDesc" => "The Email element applies the Email validation rule by default.  If supported, HTML5 validation will also be provided client-side."
        )));
        $form->addElement(new \F\PFBC\Element\Number("Numeric:", "Numeric", array(
            "longDesc" => "The Number element applies the Numeric validation rule by default.  If supported, HTML5 validation will also be provided client-side."
        )));
        $form->addElement(new \F\PFBC\Element\Url("Url:", "Url", array(
            "longDesc" => "The Url element applies the Url validation rule by default.  If supported, HTML5 validation will also be provided client-side."
        )));
        $form->addElement(new \F\PFBC\Element\Date("Date:", "Date", array(
            "longDesc" => "The Date element applies the RegExp validation rule by default - ensuring the following date format YYYY-MM-DD is adhered to."
        )));
        $form->addElement(new \F\PFBC\Element\jQueryUIDate("", "Date2", array(
            "longDesc" => "The jQueryUIDate element applies the Date validation rule by default - ensuring the submitted value satisfies <a href=\"http://us3.php.net/manual/en/datetime.construct.php\">PHP's DateTime class constructor</a>."
        )));
        $form->addElement(new \F\PFBC\Element\Textbox("AlphaNumeric:", "AlphaNumberic", array(
            "validation" => new \F\PFBC\Validation\AlphaNumeric,
            "longDesc" => "The AlphaNumeric validation class will verify that the element's submitted value contains only letters, numbers, underscores, and/or hyphens."
        )));
        $form->addElement(new \F\PFBC\Element\Captcha("Captcha:", array(
            "longDesc" => "The Captcha element applies the Captcha validation, which uses <a href=\"http://www.google.com/recaptcha\">reCaptcha's anti-bot service</a> to reduce spam submissions."
        )));
        $form->addElement(new \F\PFBC\Element\Email("Multiple Rules:", "Email2", array(
            "validation" => new \F\PFBC\Validation\RegExp("/.*@gmail.com$/", "Error: The %element% field must contain a Gmail address."),
            "longDesc" => "Multiple validation rules can be attached to an element by passing the validation property an array of validation class instances.  This Email element also applies the RegExp validation rule to ensure the supplied email address is from Gmail."
        )));
        $form->addElement(new \F\PFBC\Element\Button);
        $form->addElement(new \F\PFBC\Element\Button("Cancel", "button", array(
            "onclick" => "history.go(-1);"
        )));

        $this->form = $form;