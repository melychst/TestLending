<?php
$afx_slider = new AFX_Post_Type("Slider");
$afx_slider->setLabels("Slider", "Sliders");
$afx_slider->setPublic(true);
//$afx_case_study->setShowInMenu("#");
$afx_slider->setSupports(array('title','editor', 'thumbnail', 'revisions'));
//$afx_slider->setHierachical(true);
//$afx_banner->afx_add_post_type();


$afx_potfolio = new AFX_Post_Type("Portfolio");
$afx_potfolio->setLabels("Portfolio", "Portfolios");
$afx_potfolio->setPublic(true);
//$afx_service->setShowInMenu("#");
//$afx_potfolio->setRewrite(array('slug' => 'services', 'with_front' => false));
$afx_potfolio->setSupports(array('title', 'editor', 'thumbnail', 'revisions'));
//$afx_potfolio->setHierachical(true);
//$afx_service->afx_add_post_type();

$afx_prices = new AFX_Post_Type("Price");
$afx_prices->setLabels("Price", "Prices");
$afx_prices->setPublic(true);
//$afx_service->setShowInMenu("#");
//$afx_potfolio->setRewrite(array('slug' => 'services', 'with_front' => false));
$afx_prices->setSupports(array('title', 'revisions'));
//$afx_potfolio->setHierachical(true);
//$afx_service->afx_add_post_type();

