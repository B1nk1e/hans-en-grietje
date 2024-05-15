set :stage, :acceptance

# Extended Server Syntax
# ======================

server "185.220.174.82", user: "enabl", port: "7685", roles: %w{web app db}
set :deploy_to, "/home/enabl/domains/hans-grietje.enabldigital.dev/public_html"
set :wpcli_remote_url, 'hans-grietje.enabldigital.dev'
set :wpcli_local_url, 'hans-grietje.test'
set :tmp_dir, '/home/enabl/tmp'
set :keep_releases, 2

current_branch = `git branch`.match(/\* (\S+)\s/m)[1]
set :branch, current_branch

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
set :ssh_options, {
  auth_methods: %w(publickey),
  user: 'enabl',
}

fetch(:default_env).merge!(wp_env: :acceptance)
