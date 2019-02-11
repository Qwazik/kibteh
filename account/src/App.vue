<template>
    <v-app id="inspire">
        <v-navigation-drawer
                v-model="drawer"
                left
                app
                fixed
                clipped
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
                <v-list-tile to="/">
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
            <v-spacer></v-spacer>
        </v-toolbar>
        <v-content>
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
    export default {
        data: () => ({
            drawer: null
        }),
        props: {
            source: String
        }
    }
</script>