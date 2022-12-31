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
        $file = $this->ensureFilesCount($commit, 1);
        $this->ensure($file == 'B.txt', 'The wrong file has been commited. Expected B.txt bet received %s.', [ConsoleUtils::blue($file)]);
        $message = GitUtils::getCommitSubject($commit);
        $this->ensure($message == "Ajout du fichier B.txt", "Mauvais message. Attendu : «Ajout du fichier B.txt», reçu : «%s»", [ConsoleUtils::blue($message)]);
    }
}
