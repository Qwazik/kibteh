<template>
    <div class="content">
        <table>
            <tr>
                <td>
                    Auth
                </td>
                <td>
                    {{isAuthenticated}}
                </td>
            </tr>
            <tr>
                <td>
                    Статус
                </td>
                <td>
                    {{authStatus}}
                </td>
            </tr>

            <button @click="login">Login</button>
            <button @click="logout">Logout</button>
        </table>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { AUTH_REQUEST, AUTH_LOGOUT } from "../store/actions/auth";

    export default {
        data: ()=>({

        }),
        mounted(){

        },
        computed: {
            ...mapGetters([
                'isAuthenticated',
                'authStatus'
            ])
        },
        methods: {
            login: function(){
                this.$store.dispatch(AUTH_REQUEST, {'password':'2342342', 'tel': '+799999999999'})
            },
            logout: function(){
                this.$store.dispatch(AUTH_LOGOUT, {'password':'2342342', 'tel': '+799999999999'})
            }
        }
    }
</script>