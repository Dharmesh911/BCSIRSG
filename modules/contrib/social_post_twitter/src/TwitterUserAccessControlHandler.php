<?php

namespace Drupal\social_post_twitter;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Twitter user entity.
 *
 * @see \Drupal\social_post_twitter\Entity\TwitterUser.
 */
class TwitterUserAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    $account = $this->prepareUser($account);
    $owner_id = $entity->getOwnerId();
    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermissions($account,
          ['view social post user entity lists',
            'delete own social post user accounts',
          ], 'OR');

      case 'delete':
        $access = AccessResult::allowedIfHasPermission($account, 'delete social post user accounts');
        if ($access->isAllowed()) {
          return $access;
        }

        if ($account->id() == $owner_id) {
          return AccessResult::allowedIfHasPermission($account, 'delete own social post user accounts');
        }
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add social post user entities');
  }

}
