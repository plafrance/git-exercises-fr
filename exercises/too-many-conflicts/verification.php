<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\GitUtils;

class TooManyConflicts extends AbstractVerification
{
    protected function doVerify()
    {
        $this->ensureCommitsCount(2);
        $message = GitUtils::getCommitSubject($commit);
        $this->ensure($message == 'Les additions et soustractions sont faites', 'This should not have been commited : %s', [ConsoleUtils::blue($message)]);
    }
}
