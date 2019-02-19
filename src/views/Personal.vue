<template>
    <div class="content">
        <v-card
                primary
                light
        >
            <v-layout wrap>
                <v-flex xs12>
                    <v-progress-linear
                            :active="isUpdating"
                            class="ma-0"
                            color="green lighten-3"
                            height="4"
                            indeterminate
                    ></v-progress-linear>
                </v-flex>
                <v-flex
                        text-xs-right
                        xs12
                >
                    <v-menu
                            bottom
                            left
                            transition="slide-y-transition"
                    >

                    </v-menu>
                </v-flex>
                <v-layout
                        align-start
                        column
                        justify-end
                        pa-3
                >
                    <h3 class="headline">{{ name ? name : 'Ваше имя' }}</h3>
                    <span class="grey--text text--lighten-0">{{ tel ? tel : 'Телефон' }}</span>
                    <span class="grey--text text--lighten-0">{{ email ? email : 'Электронная почта' }}</span>
                </v-layout>
            </v-layout>

            <v-form>
                <v-container>
                    <v-layout wrap>
                        <v-flex xs12 md6>
                            <v-text-field
                                    @keyup.enter="isUpdating = true"
                                    v-model="name"
                                    :disabled="isUpdating"
                                    box
                                    color="blue-grey lighten-2"
                                    label="Имя"

                            ></v-text-field>
                        </v-flex>
                        <v-flex xs12 md6>
                            <v-text-field
                                    @keyup.enter="isUpdating = true"
                                    v-model="tel"
                                    :disabled="true"
                                    box
                                    type="tel"
                                    color="blue-grey lighten-2"
                                    label="Телефон"
                            ></v-text-field>
                        </v-flex>

                        <v-flex xs12 md6>
                            <v-text-field
                                    @keyup.enter="isUpdating = true"
                                    v-model="email"
                                    :disabled="true"
                                    box
                                    type="email"
                                    color="blue-grey lighten-2"
                                    label="Почта"
                            ></v-text-field>
                        </v-flex>

                        <v-flex xs12 md6>
                            <v-text-field
                                    @keyup.enter="isUpdating = true"
                                    v-model="password"
                                    :disabled="isUpdating"
                                    readonly
                                    box
                                    type="password"
                                    color="blue-grey lighten-2"
                                    label="Пароль"
                                    :append-icon="'edit'"
                                    @click:append="changePasswordDialog = !changePasswordDialog "
                            ></v-text-field>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-form>
            <v-divider></v-divider>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                        :disabled="false"
                        :loading="isUpdating"
                        color="primary"
                        depressed
                        @click="isUpdating = true"
                >
                    <v-icon left>update</v-icon>
                    Обновить
                </v-btn>
            </v-card-actions>
        </v-card>

        <v-dialog v-model="changePasswordDialog " width="500">
            <v-card class="elevation-12">

                <v-toolbar dark color="primary">
                    <v-toolbar-title>Смена пароля</v-toolbar-title>
                </v-toolbar>
                <v-progress-linear
                        :active="isUpdatingPassword"
                        class="ma-0"
                        color="green lighten-3"
                        height="4"
                        indeterminate
                ></v-progress-linear>
                <v-card-text>
                    <v-form>
                        <v-text-field
                                @keyup.enter="isUpdatingPassword = true"
                                :disabled="isUpdatingPassword"
                                prepend-icon="lock_open"
                                name="oldPassword"
                                label="Старый пароль"
                                type="text">
                        </v-text-field>
                        <v-text-field
                                @keyup.enter="isUpdatingPassword = true"
                                :disabled="isUpdatingPassword"
                                id="password"
                                prepend-icon="lock"
                                name="newPassword"
                                label="Новый пароль"
                                type="password">
                        </v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" :loading="isUpdatingPassword" @click="isUpdatingPassword = true">Сменить
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                autoUpdate: true,
                friends: ['Sandra Adams', 'Britta Holt'],
                isUpdating: false,
                isUpdatingPassword: false,
                changePasswordDialog: false,
                name: '',
                tel: '',
                email: '',
                password: 'sdfsdfsfs',
                oldPassword: '',
                newPassword: ''
            }
        },
        watch: {
            isUpdating(val) {
                if (val) {
                    setTimeout(() => (this.isUpdating = false), 3000)
                }
            },
            isUpdatingPassword(val) {
                if (val) {
                    setTimeout(() => (this.isUpdatingPassword = false), 3000)
                }
            },
        },

        methods: {
            remove(item) {
                const index = this.friends.indexOf(item.name)
                if (index >= 0) this.friends.splice(index, 1)
            },
            changePassword() {
                alert('change');
            },
            increaseCount() {
                this.$store.commit('increment');
            }
        }
    }
</script>