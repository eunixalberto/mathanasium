# used to start localdevelopment given lando is installed and node tools is initiated
. ~/.nvm/nvm.sh
nvm use 8
lando start
cd web/wp-content/themes/mathanasium
gulp
gulp watch
