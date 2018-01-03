set :stage, :staging

set :deploy_to, -> { ENV['STAGE_DEPLOY_TO'] }
set :tmp_dir, ENV['STAGE_TMP_DIR']

# Simple Role Syntax
# ==================
#role :app, %w{deploy@example.com}
#role :web, %w{deploy@example.com}
#role :db,  %w{deploy@example.com}

# Extended Server Syntax
# ======================
server ENV['STAGE_SERVER'], user: ENV['STAGE_USER'], roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
#set :ssh_options, {
#    user: 'u76768874',
#    keys: %w(~/.ssh/id_rsa),
#    forward_agent: true,
#    auth_methods: ["publickey"]
#}

fetch(:default_env).merge!(wp_env: :staging)

set :wpcli_remote_url, 'http://skunkworks.mindblast.info'
set :wpcli_local_url, 'http://localhost:9000'
