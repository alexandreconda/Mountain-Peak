[authldap:default]
hostname=
port=
ldapUser=
ldapPassword=
_name=default
[jcache:myapp]
enabled=1
driver=file
ttl=0
cache_dir=
file_locking=1
directory_level=0
directory_umask=
file_name_prefix=
cache_file_umask=
_name=myapp
[jcache:default]
enabled=1
driver=file
ttl=0
cache_dir=
file_locking=1
directory_level=0
directory_umask=
file_name_prefix=
cache_file_umask=
_name=myapp
[jdb:app]
driver=pgsql
database=mountainpeak
host=mountainpeak-db-1
user=mountainpeak
password=postgres
persistent=on
force_encoding=on
_name=app
usepdo=
table_prefix=
dbtype=pgsql
phpext=pgsql
pdoext=pdo_pgsql
pdodriver=pgsql
pdooptions=
[jdb:default]
driver=pgsql
database=mountainpeak
host=mountainpeak-db-1
user=mountainpeak
password=postgres
persistent=on
force_encoding=on
_name=app
usepdo=
table_prefix=
dbtype=pgsql
phpext=pgsql
pdoext=pdo_pgsql
pdodriver=pgsql
pdooptions=
[jkvdb:jpref]
_name=jpref
[jsoapclient:default]
wsdl=
soap_version=SOAP_1_1
_name=default
[smtp:mailer]
host=localhost
port=25
secure_protocol=
helo=
auth_enabled=
username=
password=
timeout=10
_name=mailer