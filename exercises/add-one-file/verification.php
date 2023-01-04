<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\ConsoleUtils;
use GitExercises\hook\utils\GitUtils;

class CommitOneFile extends AbstractVerification
{
    protected function doVerify()
    {
        $commit = $this->ensureCommitsCount(1);
        $files = $this->ensureFilesCount($commit, 1);
        $this->ensure($files == ['nouveau.txt'], 'The wrong file was commited. Expected "nouveau.txt" bet received %s.', [ConsoleUtils::blue($file)]);
    }
}
