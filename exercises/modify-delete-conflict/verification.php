<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;
use GitExercises\hook\utils\ConsoleUtils;
use GitExercises\hook\utils\GitUtils;

class ModifyDeleteConflict extends AbstractVerification
{
    protected function doVerify()
    {
        $mergeCommit = $this->ensureCommitsCount(4)[0];
        $parents = GitUtils::getParents($mergeCommit);
        $this->ensure(count($parents) == 2, 'The last commit should be a merge commit.');

        $this->ensureFilesCount($mergeCommit, 2);

        $files = GitUtils::getChangedFiles($mergeCommit);
        $this->ensure(isset($files['supprimer.txt']), "You were supposed to remove ignored.txt file.");
        $this->ensure($files['supprimer.txt'] == 'D', "You were supposed to remove ignored.txt file, not change it.");
        $this->ensure(isset($files['conserver.txt']), "You were supposed to modify ignored.txt file.");
        $this->ensure($files['conserver.txt'] == 'M', "You were supposed to modify ignored.txt file, not delete it.");
    }
}
