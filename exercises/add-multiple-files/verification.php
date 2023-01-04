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
        $files = $this->ensureFilesCount($commit, 3);
        $this->ensure($files == ['hello.py', 'calc.py', 'RUN.txt'], 'The wrong files have been commited. Expected "hello.py", "calc.py" and "RUN.txt" bet received %s.', [ConsoleUtils::blue($file)]);
    }
}
