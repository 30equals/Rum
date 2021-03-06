<?php

namespace Rum\Component\Rum;

interface RumInterface {
  public function getWorkspace();

  public function getProjectDomain();

  public function getProjectDir();

  public function getProjectName();

  public function getHostName();

  public function getOs();

  public function getEnvironment();

  public function getTime();

  public function getCoreVersion();

  public function setCoreVersion($version);
  
  public function getDocumentRoot();

  public function setDocumentRoot($document_directory);
}