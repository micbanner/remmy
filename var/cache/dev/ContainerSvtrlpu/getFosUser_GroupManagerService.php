<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.group_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Model\\GroupManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Model\\GroupManager.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Doctrine\\GroupManager.php';

return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager(${($_ = isset($this->services['fos_user.object_manager']) ? $this->services['fos_user.object_manager'] : $this->load('getFosUser_ObjectManagerService.php')) && false ?: '_'}, 'Remmy\\MainBundle\\Entity\\Group');
