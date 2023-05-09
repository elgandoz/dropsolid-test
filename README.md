## Marco Gandi Dropsolid Test

_based on [Dropsolid Rocketship Distribution](https://www.drupal.org/project/dropsolid_rocketship)_


### Scope of work
- [Dropsolid Layout exercise (FrontEnd)](docroot/themes/custom/rocketship_theme_marco/README.md)
- [Dependendency Injection exercise](docroot/modules/custom/dependency-injection-exercise-main/README.md)

### Setup
This has been developed locally using [DDEV](https://ddev.readthedocs.io/en/stable/).

Assuming you have DDEV (and Docker) installed locally:
```sh
git clone git@github.com:elgandoz/dropsolid-test.git;
cd dropsolid-test; ddev start;
ddev composer i; ddev import-db --src=db.sql.gz; ddev drush deploy -y;
cd docroot/themes/custom/rocketship_theme_marco;
nvm i; npm i; npm run build;
ddev launch
```
