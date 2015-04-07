<?php

/**
 * @file
 * Administration page callbacks for Yam.
 */

/**
 * Build settings form.
 */
function yam_admin_settings() {

  $form['yam_feature_package'] = array(
    '#type'          => 'select',
    '#title'         => t('Default Feature package'),
    '#options'       => yam_get_feature_packages(),
    '#default_value' => variable_get('yam_feature_package', array('none' => 'None')),
    '#description'   => t('In !url administration page, select a default Feature package. Requires Features module.', array(
      '!url' => l(t('Features'), 'admin/structure/features'),
    )),
    '#required'      => FALSE,
  );

  $form['yam_locale_domains'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Show domains in language list'),
    '#default_value' => variable_get('yam_locale_domains', FALSE),
    '#description'   => t('In !url administration page, show the domain associated to each language. Requires Locale module.', array(
      '!url' => l(t('Languages'), 'admin/config/regional/language'),
    )),
    '#required'      => FALSE,
  );

  $form['yam_file_autoupload'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Autoupload files'),
    '#default_value' => variable_get('yam_file_autoupload', TRUE),
    '#description'   => t("In AJAX file uploads, automatically press the 'Upload' form button. Requires File module."),
    '#required'      => FALSE,
  );

  $form['yam_status_report'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Extended Status Report'),
    '#default_value' => variable_get('yam_status_report', TRUE),
    '#description'   => t('Show more Server information in the !url (OS, IP, uptime...)', array(
      '!url' => l(t('Status Report'), 'admin/reports/status'),
    )),
    '#required'      => FALSE,
  );

  $form['yam_module_paths'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Module path in Modules admin page'),
    '#default_value' => variable_get('yam_module_paths', TRUE),
    '#description'   => t('In !url administration page, display the path where each module is installed.', array(
      '!url' => l(t('Modules'), 'admin/modules'),
    )),
    '#required'      => FALSE,
  );

  $form['yam_module_settings_pages'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Create menu for modules settings pages'),
    '#default_value' => variable_get('yam_module_settings_pages', TRUE),
    '#description'   => t('All module setting pages can be accessed in a standard path: admin/modules/settings/module_name. Also, if using Admin Menu, a new Settings section under "Modules" allows going to the settings page by module name.'),
    '#required'      => FALSE,
  );

  return system_settings_form($form);
}
