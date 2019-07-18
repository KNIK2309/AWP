<html>

<body>
    <?php
    echo "<h2>contact us"

        function filterName($field)
        {
        $field=filter_var(trim($field), FILTER_SANITIZE_STRING);
        if(filter_var($field,FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/))))
        {
            return $field;
        }
            else
            {
                return FALSE;
            }
        }


        function filterEmail($field)
        {
        $field=filter_var(trim($field), FILTER_SANITIZE_EMAIL);
        if(filter_var($field,FILTER_VALIDATE_EMAIL))
        {
            return $field;
        }
            else
            {
                return FALSE;
            }
        }


        function filterString($field)
        {
        $field=filter_var(trim($field), FILTER_SANITIZE_STRING);
        if(!empty($field))
        {
            return $field;
        }
            else
            {
                return FALSE;
            }
        }


?>
</body>
    </html>