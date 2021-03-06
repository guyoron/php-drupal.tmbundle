/**
 * Implements hook_field_formatter_settings_summary().
 */
function <?php print $basename; ?>_field_formatter_settings_summary(\$field, \$instance, \$view_mode) {
  ${1:\$display = \$instance['display'][\$view_mode];
  \$settings = \$display['settings'];

  \$summary = '';

  if (\$display['type'] == 'text_trimmed' || \$display['type'] == 'text_summary_or_trimmed') {
    \$summary = t('Length: @chars chars', array('@chars' => \$settings['trim_length']));
  \}

  return \$summary;}
}

$2