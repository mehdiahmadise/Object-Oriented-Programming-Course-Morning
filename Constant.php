<?php

class Project {
  const PENDING = 'Pending';
  const COMPLETED = 'Completed';
  const CLOSE = 'Close';
}

$status = Project::COMPLETED;

echo $status;