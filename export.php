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
        $objActSheet->getColumnDimension('J')->setWidth(50);
        $objActSheet->getColumnDimension('K')->setWidth(50);

        $ASCII = 65;
        $objActSheet->setCellValue(chr($ASCII++) . '1', '订单编号');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '批次名称');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '学校');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '姓名');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '性别');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '手机');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '地址');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '快递单号');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '快递公司');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '产品清单');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '发货详情');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '备注');
        $objActSheet->setCellValue(chr($ASCII++) . '1', '是否扫描');

        $column=2;
        //$datas=[['order_sn'=>'6909759053412631','pro_name'=>'测试学校','nickname'=>'陈翔宇','name'=>'翔宇','phone'=>'15000694560','address'=>'dadad','pro_info'=>'产品名称','fa_huo_info'=>'发货信息','note'=>'备注','is_sao_miao'=>'是否扫描'],['order_sn'=>'6909759053412631','pro_name'=>'测试学校','nickname'=>'陈翔宇','name'=>'翔宇','phone'=>'15000694560','address'=>'dadad','pro_info'=>'产品名称','fa_huo_info'=>'发货信息','note'=>'备注','is_sao_miao'=>'是否扫描']];   //示例数组


        foreach ($datas as $v){

            $ASCII = 65;
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column,  'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');
            $objActSheet->setCellValue(chr($ASCII++) . $column, 'xcada');

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