<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\GitUtils;
use GitExercises\hook\utils\ConsoleUtils;

class ConfigUser extends AbstractVerification
{
    protected function doVerify()
    {
        $commit = $this->ensureCommitsCount(1);
        $file = $this->ensureFilesCount($commit, 1);
        $name = GitUtils::getCommitterName($commit);
        $email = GitUtils::getCommitterEmail($commit);

        $this->ensure( $email != "you@example.com" && $name != "Your Name", "Les nom et courriel n'ont pas été configurés" );
        $this->ensure( $name == CommiterService::getMostRecentName($email), "Le nom ne correspond pas à celui des exercices précédents." );
    }
}
