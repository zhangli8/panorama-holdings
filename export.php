<?php
class export {
    public function exports($datas){
        require 'vendor/PHPExcel/PHPExcel.class.php';
        $objPHPExcel = new \PHPExcel();

        $objPHPExcel->getProperties(); //获取属性
        $objPHPExcel->createSheet();
        $objPHPExcel->setActiveSheetIndex(0);

        $objActSheet = $objPHPExcel->getActiveSheet()->setTitle('微信数据汇总');

//$objPHPExcel->getActiveSheet()->mergeCells('A1:B1');//合并单元格

        $objActSheet->getDefaultStyle()->getFont()->setSize(10);
        /* $objActSheet->getStyle('A:U')->getAlignment()->applyFromArray(array('horizontal' => '', 'vertical' => 'center', 'rotation' => 0, 'wrap' => TRUE));
         $objActSheet->getStyle('A1:U1')->getAlignment()->applyFromArray(array('horizontal' => 'center', 'vertical' => 'center', 'rotation' => 0, 'wrap' => TRUE));*/
// $objActSheet->getRowDimension('1')->setRowHeight(22);
//背景色
        /* $objActSheet->getStyle('A1:U1')->getFill()->getStartColor()->setRGB('f9ce19');
         $objActSheet->getStyle('A1:U1')->getFill()->setFillType('solid');*/
//$objPHPExcel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        /* $objActSheet->getColumnDimension('A')->setAutoSize (true);
        $objActSheet->getColumnDimension('B')->setAutoSize (true);
        $objActSheet->getColumnDimension('C')->setAutoSize (true);
        $objActSheet->getColumnDimension('D')->setAutoSize (true);
        $objActSheet->getColumnDimension('E')->setAutoSize (true);*/

        $objPHPExcel -> getActiveSheet() -> getColumnDimension(PHPExcel_Cell::stringFromColumnIndex(0)) -> setAutoSize(true);///设置自动宽度



        /*$objPHPExcel->getActiveSheet()->getStyle('A')->getAlignment()->setWrapText(true);
        $objPHPExcel->getActiveSheet()->getStyle('B')->getAlignment()->setWrapText(true);
        $objPHPExcel->getActiveSheet()->getStyle('C')->getAlignment()->setWrapText(true);
        $objPHPExcel->getActiveSheet()->getStyle('D')->getAlignment()->setWrapText(true);
        $objPHPExcel->getActiveSheet()->getStyle('E')->getAlignment()->setWrapText(true);
        $objPHPExcel->getActiveSheet()->getStyle('F')->getAlignment()->setWrapText(true);*/
        $objPHPExcel->getActiveSheet()->getStyle('J')->getAlignment()->setWrapText(true);
        $objPHPExcel->getActiveSheet()->getStyle('K')->getAlignment()->setWrapText(true);

        /* $objPHPExcel->getActiveSheet()->getStyle('I')->getAlignment()->setWrapText(true);
         $objPHPExcel->getActiveSheet()->getStyle('J')->getAlignment()->setWrapText(true);*/
//$objPHPExcel->getActiveSheet()->mergeCells('A1:A2');
//$objPHPExcel->getActiveSheet()->unmergeCells('A1:A2');
        $objActSheet->getColumnDimension('J')->setWidth(15);
        $objActSheet->getColumnDimension('K')->setWidth(20);
        $headArr=['中文姓名','性别','姓名拼音','出生日期','护照号码','国籍','是否有对食物过敏','过敏食物名称','是否有对药物过敏','过敏药物名称','是否有个人特殊要求','特殊要求','家长中文姓名','家长(监护人)护照英文姓名拼音)','出生日期','关系','国籍','护照号码','联系电话','是否有移民需求','孩子将来是否有赴美教育规划','电子邮件','地址','邮政编码','紧急联系人','与紧急联系人关系','联系电话','微信','报名选项','套餐内容选项'];
        $key = 0;
        foreach($headArr as $v){
            //注意，不能少了。将列数字转换为字母\
            $colum = \PHPExcel_Cell::stringFromColumnIndex($key);
            $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
            $key += 1;
        }


        $column = 2; //从第二行写入数据 第一行是表头


        foreach($datas as $key => $rows){ //行写入
           //取出多余字段
            unset($rows['id']);
            unset($rows['created_at']);
            unset($rows['updated_at']);
           //dd($rows);
            $span = 0;
            foreach($rows as $keyName=>$value){// 列写入

                $j = \PHPExcel_Cell::stringFromColumnIndex($span);
                $objActSheet->setCellValue($j.$column, $value);
                $span++;
            }
            $column++;
        }





        $fileName = iconv("utf-8", "gb2312", '淘宝数据汇总表格' . date('Ymd') . '.xls');

        ob_end_clean();
        header('Content-Type: application/vnd.ms-excel');
        header("Content-Disposition: attachment;filename=\"$fileName\"");
        header('Cache-Control: max-age=0');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output'); //文件通过浏览器下载
    }
}

?>