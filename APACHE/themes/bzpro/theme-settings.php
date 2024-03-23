<?php

use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\file\Entity\File;
use Drupal\Core\Url;

function bzpro_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $theme_file = drupal_get_path('theme', 'bzpro') . '/theme-settings.php';
    $build_info = $form_state->getBuildInfo();
    if (!in_array($theme_file, $build_info['files'])) {
        $build_info['files'][] = $theme_file;
    }
    $form_state->setBuildInfo($build_info);

    $form['#submit'][] = 'bzpro_theme_settings_form_submit';


        $form['settings'] = array(
        '#type' => 'details',
        '#title' => t('Theme settings'),
        '#open' => TRUE,
        
    );


    $form['settings']['general_setting'] = array(
        '#type' => 'details',
        '#title' => t('General Settings'),
        '#open' => FALSE,
    );

    $form['settings']['general_setting']['general_setting_tracking_code'] = array(
        '#type' => 'textarea',
        '#title' => t('Tracking Code'),
        '#default_value' => theme_get_setting('general_setting_tracking_code', 'bzpro'),
    );

    
// Header settings
    $form['settings']['header'] = array(
        '#type' => 'details',
        '#title' => t('Header settings'),
        '#open' => FALSE,
    );
    

    $form['settings']['header']['header_layout'] = array(
        '#type' => 'select',
        '#title' => t('Top header bg'),
        '#options' => array(
            'header1' => t('Header 1'),
            'header2' => t('Header 2'),
            'header3' => t('Header 3'),
            'header4' => t('Header 4')
        ),
        '#required' => true,
        '#default_value' => theme_get_setting('header_layout', 'bzpro'),
    );
//đoạn này lại vẫn test thử
    $form['settings']['products']=array(
        '#type' => 'details',
        '#title' => t('Products settings'),
        '#open' => FALSE,
    );
     $form['settings']['products']['products_sidebar'] = array(
        '#type' => 'select',
        '#title' => t('Products Sidebar'),
        '#options' => array(
            'left' => t('Left'),
            'right' => t('Right'),
        ),
        '#required' => true,
        '#default_value' => theme_get_setting('products_sidebar', 'bzpro'),
    );

     // page settings
    $form['settings']['page_title'] = array(
        '#type' => 'details',
        '#title' => t('Page title settings'),
        '#open' => FALSE,
    );
    $form['settings']['page_title']['default_breadcrumb_image'] = array(
        '#type'     => 'managed_file',
        '#title'    => t('Page title background image upload'),
        '#required' => FALSE,
        '#upload_location' => 'public://background/',
        '#default_value' => theme_get_setting('default_breadcrumb_image','bzpro'),
        '#upload_validators' => array(
            'file_validate_extensions' => array('gif png jpg jpeg'),
            '#progress_message' => 'Uploading ...',
            '#required' => FALSE,
        ),
    );

//Đoạn đang làm thử -đang thử
    // $form['settings']['blog'] = array(
    //     '#type' => 'details',
    //     '#title' => t('Blog settings'),
    //     '#open' => FALSE,
    // );
    
    //  $form['settings']['blog']['blog_layout'] = array(
    //     '#type' => 'select',
    //     '#title' => t('Blog Style'),
    //     '#options' => array(
    //         'style1' => t('Style 1'),
    //         'style2' => t('Style 2'),
    //         'style3' => t('Style 3'),
    //     ),
    //     '#required' => true,
    //     '#default_value' => theme_get_setting('blog_layout', 'bzpro'),
    // );
    // blog_single 
    //  $form['settings']['blog']['blog_single'] = array(
    //     '#type' => 'details',
    //     '#title' => t('Blog single settings'),
    //     '#open' => FALSE,
    // );


    // $form['settings']['blog']['blog_single']['blog_single_sidebar'] = array(
    //     '#type' => 'select',
    //     '#title' => t('Default sidebar'),
    //     '#options'  => array(
    //         'left'  => t('Left'),
    //         'right' => t('Right'),
    //         'full_width' => t('Full width'),
           
    //     ),

    //     '#default_value' => theme_get_setting('blog_single_sidebar', 'inobi'),
    // );


//hết

// custom css
    $form['settings']['custom_css'] = array(
        '#type' => 'details',
        '#title' => t('Custom CSS'),
        '#open' => FALSE,
    );

    $form['settings']['custom_css']['custom_css'] = array(
        '#type' => 'textarea',
        '#title' => t('Custom CSS'),
        '#default_value' => theme_get_setting('custom_css', 'bzpro'),
        '#description' => t('<strong>Example:</strong><br/>h1 { font-family: \'Metrophobic\', Arial, serif; font-weight: 400; }')
    );



}

function bzpro_theme_settings_form_submit(&$form, FormStateInterface $form_state) {
    $account = \Drupal::currentUser();
    $values = $form_state->getValues();

    $bg[0] = $values['default_breadcrumb_image']; 
    // $bg[1] = $values['blog_breadcrumb_image']; 
    // $bg[2] = $values['shop_breadcrumb_image'];
    // $bg[3] = $values['default_shop_breadcrumb_image'];
    // $bg[4] = $values['default_contact_breadcrumb_image'];
    // /*$bg[4] = $values['port_title_bg'];*/

    $count = count($bg);
    for ($i=0; $i < $count; $i++) {

    if (isset($bg[$i]) && !empty($bg[$i])) {
          // Load the file via file.fid.
          $file1 = file_load($bg[$i][0]);
          // Change status to permanent.
          $file1->setPermanent();
          $file1->save();
          $file_usage = \Drupal::service('file.usage');
          $file_usage->add($file1, 'bzpro', 'theme', 1);
        } 
    }
        
}
?>