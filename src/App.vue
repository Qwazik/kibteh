<template>
    <v-app id="inspire">

        <v-navigation-drawer
                v-model="drawer"
                left
                app
                fixed
                clipped
                v-if="isAuthenticated"
        >

            <v-list dense>
                <v-list-tile href="/">
                    <v-list-tile-action>
                        <v-icon>home</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            На главную
                        </v-list-tile-title>

                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile to="/home">
                    <v-list-tile-action>
                        <v-icon>fa-user</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Личные данные</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile to="/keys-list">
                    <v-list-tile-action>
                        <v-icon>list</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Список ключей</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile to="/keys-send">
                    <v-list-tile-action>
                        <v-icon>vpn_key</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Отправные ключи</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile to="/balance">
                    <v-list-tile-action>
                        <v-icon>attach_money</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Личный счет</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>

        <v-toolbar color="primary" dark app fixed clipped-left>
            <template v-if="isAuthenticated">
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-toolbar-title>
                <div class="header-logo">
                    <a href="/" class="header-logo__logo">

                    </a>
                    <div class="header-logo__title">
                        Личный кабинет
                    </div>
                </div>
            </v-toolbar-title>
            </template>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down" v-if="isAuthenticated">
                <v-btn flat @click="logout">Выйти</v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <v-content>
            <v-progress-linear
                    :active="authStatus === 'loading'"
                    class="ma-0"
                    color="green lighten-3"
                    height="4"
                    indeterminate
            ></v-progress-linear>
            <v-container fluid fill-height>
                <v-layout justify-center>
                    <router-view></router-view>
                </v-layout>
            </v-container>
        </v-content>


    </v-app>
</template>

<style>
    .content {
        width: 100%;
        max-width: 1200px;
        padding: 0 20px;
        margin-left: auto;
        margin-right: auto;
    }

    @media screen and (max-width: 992px) {
        .content {
            padding-left: 0;
            padding-right: 0;
        }
    }
</style>

<script>
    import { mapGetters, mapActions } from "vuex"
    import { AUTH_LOGOUT } from "./store/actions/auth";

    export default {
        data: () => ({
            drawer: null
        }),
        computed: {
            ...mapGetters([
                'isAuthenticated',
                'authStatus'
            ])
        },
        created: function(){
          if(this.$store.getters.isAuthenticated){
              this.$router.push('/home');
          }
        },
        watch: {
            isAuthenticated(val){
                if(val) this.$router.push('/home');
                else {
                    this.$router.push('/');
                    location.href="/"
                }
            }
        },
        props: {
            source: String
        },
        methods: {
            logout: function(){
                this.$store.dispatch('AUTH_LOGOUT');
                this.$router.push('/');
                location.href="/"
            }
        }
    }
</script>