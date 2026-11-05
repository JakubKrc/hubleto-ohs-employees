<?php

namespace Hubleto\App\External\WaiBlue\OhsEmployees\Models\Migrations;

use Hubleto\Framework\Migration;

// A job position held by employees cannot be deleted (both legacy apps), so no employee loses their job.
class Employee_0002 extends Migration
{
  public function upgradeSchema(): void
  {
  }

  public function downgradeSchema(): void
  {
  }

  public function upgradeForeignKeys(): void
  {
    $this->db->execute("ALTER TABLE `ohs_employees` DROP FOREIGN KEY `fk__ohs_employees__id_job`");
    $this->db->execute("ALTER TABLE `ohs_employees` ADD CONSTRAINT `fk__ohs_employees__id_job` FOREIGN KEY (`id_job`) REFERENCES `ohs_jobs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT");
  }

  public function downgradeForeignKeys(): void
  {
    $this->db->execute("ALTER TABLE `ohs_employees` DROP FOREIGN KEY `fk__ohs_employees__id_job`");
    $this->db->execute("ALTER TABLE `ohs_employees` ADD CONSTRAINT `fk__ohs_employees__id_job` FOREIGN KEY (`id_job`) REFERENCES `ohs_jobs` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT");
  }
}
