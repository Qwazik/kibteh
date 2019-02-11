<template>
  <div class="content">
    <v-card>
      <v-progress-linear
              :active="inProcess"
              class="ma-0"
              color="green lighten-3"
              height="4"
              indeterminate
      ></v-progress-linear>
      <v-list two-line subheader>
        <v-list-tile v-for="item in items" :key="item.title" avatar @click="">
          <v-list-tile-avatar  class="hidden-sm-and-down">
            <v-icon :class="[item.iconClass]">{{ item.icon }}</v-icon>
          </v-list-tile-avatar>
          <v-list-tile-content>
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            <v-list-tile-sub-title>{{ item.subtitle }}</v-list-tile-sub-title>
          </v-list-tile-content>
          <v-btn class="hidden-xs-only" color="primary" @click="inProcess = !inProcess" :disabled="inProcess">
            Удалить ключ
          </v-btn>
          <v-list-tile-action class="hidden-sm-and-up" dark>
            <v-btn icon color="red"  @click="inProcess = !inProcess" :disabled="inProcess">
              <v-icon color="white">close</v-icon>
            </v-btn>
          </v-list-tile-action>
        </v-list-tile>


      </v-list>

    </v-card>
  </div>
</template>


<script>
    export default {
        data () {
            return {
                inProcess: false,
                items: [
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'DUTCH HOUSE', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Ворота центральные', subtitle: 'c 3:00 01.02.2019 по 2:59 01.03.2019' },
                    { icon: 'vpn_key', iconClass: 'grey lighten-1 white--text', title: 'Демо Контроллер', subtitle: 'c 15:30 09.04.2018 по 15:30 09.04.2018' }
                ],
            }
        },
        watch: {
            inProcess: function(val){
                if(val){
                    setTimeout(()=>{this.inProcess = false}, 3000)
                }
            }
        }
    }
</script>