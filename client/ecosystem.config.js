module.exports = {
  apps : [{
    name      : 'opnform',
    script    : './.output/server/index.mjs',
    instances : 'max',
    exec_mode : 'cluster',
    watch     : false,
    port      : 3100
  }]
}
