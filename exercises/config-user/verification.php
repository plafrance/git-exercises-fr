<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\GitUtils;
use GitExercises\hook\utils\ConsoleUtils;
use GitExercises\services\CommitterService;

class ConfigUser extends AbstractVerification
{
    protected function doVerify()
    {
        $commit = $this->ensureCommitsCount(1);
        $file = $this->ensureFilesCount($commit, 1);
        $name = GitUtils::getCommitterName($commit);
        $email = GitUtils::getCommitterEmail($commit);

        $this->ensure( $email != "you@example.com" && $name != "Your Name", "Les nom et courriel n'ont pas été configurés" );
        $id = (new CommitterService())->getCommitterId($email);
        $previousName = (new CommitterService())->getMostRecentName($id);
        $this->ensure( $name == $previousName, "Le nom ne correspond pas à celui des exercices précédents ($name != $previousName)." );
    }
}
