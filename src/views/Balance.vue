<template>
    <div class="content">
        <div class="balance">
            <v-icon class="balance__ico">fa-wallet</v-icon>
            <div class="balance-info">
                <div class="balance-info__val">7</div>
                <div class="balance-info__currency">рублей</div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <v-tabs fixed-tabs color="primary" dark>
            <v-tab
                    :key="0"
            >
                История платежей
            </v-tab>
            <v-tab
                    :key="1"
            >
                Пополнить баланс
            </v-tab>


            <v-tab-item
                    :key="0"
            >
                <v-card flat>
                    <v-card-text>
                        <v-timeline :dense="windowSize.x < 600" v-resize="onResize">
                            <v-timeline-item
                                    v-for="n in 10"
                                    :key="n"
                                    color="primary lighten-2"
                                    small
                            >
                                <span slot="opposite" class="timeline-date">10.12.2015</span>
                                <v-card class="elevation-2">

                                    <v-card-title class="pb-0 hidden-sm-and-up"><span class="timeline-date">10.12.2015</span></v-card-title>
                                    <v-card-title class="timeline-price">100 рублей</v-card-title>
                                    <v-card-text>
                                        Обслуживание ключей 'SmartLock-114-1' за февраль 2019 г.
                                    </v-card-text>
                                </v-card>
                            </v-timeline-item>
                        </v-timeline>
                    </v-card-text>
                </v-card>
            </v-tab-item>

            <v-tab-item :key="1">
                <v-card flat>
                    <v-card-text>
                        <v-layout justify-center>
                            <v-flex xs12 sm6 class="mt-5">
                                <v-text-field
                                        label="Сумма"
                                        single-line
                                        color="primary"
                                        outline
                                        class="money-input"
                                ></v-text-field>
                                <div class="text-xs-center">
                                    <v-btn large round color="primary" dark>Пополнить</v-btn>
                                </div>
                            </v-flex>
                        </v-layout>
                    </v-card-text>
                </v-card>

            </v-tab-item>
        </v-tabs>





    </div>
</template>


<style lang="scss">
    .money-input{
        text-align: center;
        font-size: 1.5rem;
        .v-label{
            left: 0 !important;
            right: 0 !important;
            margin-left: auto;
            margin-right: auto;
        }
        input{
            text-align: center;
        }
    }
    .v-timeline-item{
        &:nth-child(odd){
            text-align: right;
            .v-card__title{
                justify-content: flex-end;
            }
        }
    }
    .timeline-date{
        font-weight: bold;
        font-size: 1.5rem;
        letter-spacing: .01em;
    }
    .timeline-price{
        font-size: 3rem !important;
        color: #1E88E5;
        font-weight: bold;
        padding-bottom: 0;
    }
    .balance{
        display: inline-flex;
        border: 2px dashed #1E88E5;
        border-radius: 5px;
        font-size: 4rem;
        line-height: 1;
        padding: 4rem 5rem;
        width: 100%;
        justify-content: center;
        background: #fff;
        align-items: center;
        &__ico{
            font-size: 8rem;
            margin-right: 2rem;
        }

        &-info{
            color: #737373;
            font-size: 2rem;
            &__val{
                font-weight: bold;
                font-size: 5rem;
            }

        }
    }

    @media screen and (max-width: 768px){
        .timeline-date{
            font-size: 1.2rem;
        }
        .balance{
            padding: 2rem   ;
            &__ico{
                font-size: 5rem;
            }
            &-info{
                font-size: 1.2rem;
                &__val{
                    font-size: 3rem;
                }
            }
        }
        .timeline-price{
            font-size: 1.8rem !important;
            padding-top: 0;
        }
        .v-timeline-item{
            &:nth-child(odd){
                text-align: left;
                .v-card__title{
                    justify-content: flex-start;
                }
            }
        }
    }
</style>

<script>
    export default {
        data: ()=>({
            windowSize: {
                x: 0,
                y: 0
            }
        }),
        mounted(){
            this.onResize()
        },
        methods: {
            onResize(){
                this.windowSize = {x: window.innerWidth, y: window.innerHeight}
            }
        }
    }
</script>