<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\GitUtils;

class TooManyConflicts extends AbstractVerification
{
    protected function doVerify()
    {
        $mergeCommit = $this->ensureCommitsCount(1)[0];
        $file = $this->ensureFilesCount($commit, 1);
        $this->ensure($file == 'canari', 'This file should not have been commited : %s', [ConsoleUtils::blue($file)]);
        $message = GitUtils::getCommitSubject($commit);
        $this->ensure($message == 'point de retour', 'This should not have been commited : %s', [ConsoleUtils::blue($message)]);
    }
}
