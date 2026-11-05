# Ohs Employees

Employees of the branches with end date, archive and the daily end-date job.

Hubleto app of the Ohs set (occupational health service, Slovakia). Namespace: `Hubleto\App\External\WaiBlue\OhsEmployees`.
Needs: `wai-blue/hubleto-ohs-core`, `wai-blue/hubleto-ohs-branches`.

## Install into a Hubleto project

```bash
composer config repositories.wai-blue/hubleto-ohs-employees vcs <repository-url>
composer require wai-blue/hubleto-ohs-employees:dev-main
php hubleto app install "Hubleto\App\External\WaiBlue\OhsEmployees"
npm run build
```
