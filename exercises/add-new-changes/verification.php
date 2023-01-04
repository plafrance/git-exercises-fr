<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\ConsoleUtils;
use GitExercises\hook\utils\GitUtils;

class AddNewChanges extends AbstractVerification
{
    protected function doVerify()
    {
        $commit = $this->ensureCommitsCount(1);
        $file = $this->ensureFilesCount($commit, 1);
        $this->ensure($file == 'helloworld.cpp', 'The wrong file has been commited. Expected <helloworld.cpp> bet received %s.', [ConsoleUtils::blue($file)]);
        
        $message = GitUtils::getCommitSubject($commit);
        $this->ensure($message == "Traduction du message de bienvenue", "Mauvais message. Attendu : «Traduction du message de bienvenue», reçu : «%s»", [ConsoleUtils::blue($message)]);

        $contenu_attendu = '  cout << "Bonjour tout le monde!!";';
        $contents = $this->getFileContent($commit, "helloworld.cpp")[4];
        $this->ensure($contents == $contenu_attendu, "Le fichier ne contient pas les derniers changements\nAttendu: %s\nReçu: %s", [$contenu_attendu, $contents]);
    }
}
