/**
 * Implements hook_install().
 */
function <?php print $basename; ?>_install() {
  ${1:// Populate the default {node_access\} record.
  db_insert('node_access')
    ->fields(array(
      'nid' => 0,
      'gid' => 0,
      'realm' => 'all',
      'grant_view' => 1,
      'grant_update' => 0,
      'grant_delete' => 0,
    ))
    ->execute();}
}

$2