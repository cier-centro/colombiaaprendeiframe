<?php

include_once 'Connect.php';

class SearchModel extends Connect {

    public function findLerningObject($keyword) {
        
        if (!empty($keyword))
            $cond .= "name_lo like '%" . $keyword . "%' ";
        else
            return false;

        $sql = 'select * from learning_object where ' . $cond . ' ';
        $rs = $this->executeQuery($sql);
        return $rs;
    }

}
