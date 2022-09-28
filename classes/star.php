<?php
class Star{
    var $productid=null;
    var $username=null;
    var $star=null;
    function __construct()
    {

    }
    function avg()
    {
        $db=new connect();
        $select="select productid,round(AVG(rating),2) avng from star_rating group by productid";
        $result=$db ->getList($select);
        $average=[];
        while($row=$result ->fetch())
        {
            $average[$row['productid']]=$row['avg'];

        }
        return $average;
    }
}

?>
