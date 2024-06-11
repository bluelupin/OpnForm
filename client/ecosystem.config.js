module.exports = {
  apps: [
    {
      name: 'opnform',
      port: '3100',
      exec_mode: 'cluster',
      instances: 'max',
      script: './.output/server/index.mjs'
    }
  ]
}
