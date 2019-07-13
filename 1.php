<?php
    function biodata()
    {
        $data['Nama'] = 'M. AL Fakhri';
        $data['Address'] = 'Perum Citra Indah';
        $data['Age'] = '17';
        $data['hobbies'] = array('Ngoding','Ngoding','Ngoding');
        $data['Married'] = TRUE;
        $data['interest_in_coding'] = TRUE;
        $data['School'] = [[ 
                            'highSchool' => 'SMK Fatahillah',
                            'university'=>'none',
                            'year_in'+>'2016',
                            'year_out'=>'2019']];
        foreach($data as $highSchool=>$values){
            $object = (object) $values;
        } 
        $data['Skills'] = array(
                        'PHP' => 'expert',
                        'Java' => 'advanced',
                        'Javascript' => 'advanced',
                        'Codeigniter' => 'expert',
                        'CSS' => 'beginner'
                    );

        
        return $data;
    }

    $data = biodata();
    $data_json = json_encode($data,JSON_PRETTY_PRINT);
    echo '<pre>Biodata'.$data_json.'</pre>';
?>