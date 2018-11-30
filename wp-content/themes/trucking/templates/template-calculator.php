<?php
/*
* Template Name: Calculator Page
*/

get_header(); ?>
    <div class="container py-6">
        <div class="page-header">
            <h1 class="heading-line text-center">
                        <span>
                            Онлайн калькулятор
                        </span>
            </h1>
            <div class="thin-sub-title text-center">
                Рассчитайте свою перевозку по Киеву!
            </div>
        </div>
        <div class="calculator-wrapper">
            <ul date-tabsp="tabsP">
                <li date-tabsc="tabs-1">Грузоперевозка</li>
                <li class="active-tab" date-tabsc="tabs-2">Переезд квартиры</li>
                <li date-tabsc="tabs-3">Переезд офиса</li>
            </ul>
            <div class="tabs-1" date-tabsp="tabsP" data-tabsc="tabs">
                <div class="obj-shipping obj-item-2">
                    <ul>
                        <li class="main-li sprite-tran1"><span class="main-span"></span>
                            <p>Транспорт</p>
                        </li>
                        <li class="obj-li" data-price="cart-1"><span
                                class="sprite-icon sprite-1t">Merсedes 1 <br/> 1 тонна/15 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-2"><span
                                class="sprite-icon sprite-2t">Merсedes 2 <br/> 2 тонны/20 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-3"><span
                                class="sprite-icon sprite-3t">Merсedes 3 <br/> 3 тонны/25 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-4"><span
                                class="sprite-icon sprite-5t">Man <br/> 5 тонн/36 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-5"><span
                                class="sprite-icon sprite-22t">Daf <br/> 22 тонны/90 м<sup><small>3</small></sup></span>
                        </li>
                    </ul>
                    <input type="checkbox" name="" id="t-1"/> <label for="t-1"> Транспорт не
                        требуется</label></div>
                <div class="obj-shipping obj-item-3">
                    <div class="item">
                        <ul>
                            <li class="main-li sprite-chel1"><span class="main-span"></span>
                                <p>Грузчики</p>
                            </li>
                            <li class="range-li">
                                <div class="range"><input class="range-input" type="range"
                                                          value="0" min="0" max="10"
                                                          step="1"
                                                          data-range="range-loaders"/>
                                    <div class="range-bg">&nbsp;</div>
                                    <div class="range-fon">&nbsp;</div>
                                    <ul class="step">
                                        <li><span class="zero">0</span>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                    </ul>
                                </div>
                                <select class="range-loaders">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></li>
                        </ul>
                    </div>
                </div>
                <div class="obj-shipping obj-item-4">
                    <ul>
                        <li class="main-li sprite-time1"><span class="main-span"></span>
                            <p>Время работы</p>
                        </li>
                        <li class="range-li">
                            <div class="range"><input class="range-input" type="range"
                                                      value="0" min="1" max="10" step="0.5"
                                                      data-range="range-time"/>
                                <div class="range-bg">&nbsp;</div>
                                <div class="range-fon">&nbsp;</div>
                                <ul class="step step-2">
                                    <li><span class="zero">1</span>1.5</li>
                                    <li>2</li>
                                    <li>2,5</li>
                                    <li>3</li>
                                    <li>3,5</li>
                                    <li>4</li>
                                    <li>4,5</li>
                                    <li>5</li>
                                    <li>5,5</li>
                                    <li>6</li>
                                    <li>6,5</li>
                                    <li>7</li>
                                    <li>7,5</li>
                                    <li>8</li>
                                    <li>8,5</li>
                                    <li>9</li>
                                    <li>9,5</li>
                                    <li>10</li>
                                </ul>
                            </div>
                            <select class="rang-time">
                                <option value="1">1 час</option>
                                <option value="1.5">1.5 часа</option>
                                <option value="2">2 часа</option>
                                <option value="2.5">2.5 часа</option>
                                <option value="3">3 часа</option>
                                <option value="3.5">3.5 часа</option>
                                <option value="4">4 часа</option>
                                <option value="4.5">4.5 часа</option>
                                <option value="5">5 часов</option>
                                <option value="5.5">5.5 часов</option>
                                <option value="6">6 часов</option>
                                <option value="6.5">6.5 часов</option>
                                <option value="7">7 часов</option>
                                <option value="7.5">7.5 часов</option>
                                <option value="8">8 часов</option>
                                <option value="8.5">8.5 часов</option>
                                <option value="9">9 часов</option>
                                <option value="9.5">9.5 часов</option>
                                <option value="10">10 часов</option>
                            </select></li>
                    </ul>
                </div>
            </div>
            <div class="tabs-2 active-tab" date-tabsp="tabsP" data-tabsc="tabs">
                <div class="obj-shipping obj-item-1">
                    <ul>
                        <li class="main-li sprite-cor1"><span class="main-span"></span>
                            <p>Обьект переезда</p>
                        </li>
                        <li class="obj-li"><span class="sprite-icon sprite-paraphernalia">Личные вещи</span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Mercedes 1</span> и
                                    <span class="bold-g"> 1-2 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">2 часа</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon sprite sprite-packaging flat f-1">1 комнатная</span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Mercedes 2</span> и
                                    <span class="bold-g"> 2-3 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">2-3 часа</span></p>
                            </div>
                        </li>
                        <li class="obj-li obj-li-active"><span
                                class="sprite-icon sprite sprite-packaging flat f-2">2 комнатная</span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Mercedes 3</span> и
                                    <span class="bold-g"> 4 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">4 часа</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon sprite-packaging flat f-3">3 комнатная</span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Man</span> и <span
                                        class="bold-g"> 4 грузчика </span><br/> Время работы
                                    - <span class="bold-g">5-6 часов</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon sprite-packaging flat f-4">4 и более комнатная</span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Man</span> и <span
                                        class="bold-g"> 4 грузчика </span><br/> Время работы
                                    - <span class="bold-g">6 часов</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span class="sprite-icon sprite-home">Дом, коттедж</span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Daf </span> и <span
                                        class="bold-g"> 6 грузчиков </span> <br/> Время
                                    работы - <span class="bold-g">8 часов</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="obj-shipping obj-item-2">
                    <ul>
                        <li class="main-li sprite-tran1"><span class="main-span"></span>
                            <p>Транспорт</p>
                        </li>
                        <li class="obj-li" data-price="cart-1"><span
                                class="sprite-icon sprite-1t">Merсedes 1 <br/> 1 тонна/15 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-2"><span
                                class="sprite-icon sprite-2t">Merсedes 2 <br/> 2 тонны/20 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-3"><span
                                class="sprite-icon sprite-3t">Merсedes 3 <br/> 3 тонны/25 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-4"><span
                                class="sprite-icon sprite-5t">Man <br/> 5 тонн/36 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-5"><span
                                class="sprite-icon sprite-22t">Daf <br/> 22 тонны/90 м<sup><small>3</small></sup></span>
                        </li>
                    </ul>
                    <input type="checkbox" name="" id="t-2"/> <label for="t-2"> Транспорт не
                        требуется</label></div>
                <div class="obj-shipping obj-item-3">
                    <div class="item">
                        <ul>
                            <li class="main-li sprite-chel1"><span class="main-span"></span>
                                <p>Грузчики</p>
                            </li>
                            <li class="range-li">
                                <div class="range"><input class="range-input" type="range"
                                                          value="0" min="0" max="10"
                                                          step="1"
                                                          data-range="range-loaders"/>
                                    <div class="range-bg">&nbsp;</div>
                                    <div class="range-fon">&nbsp;</div>
                                    <ul class="step">
                                        <li><span class="zero">0</span>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                    </ul>
                                </div>
                                <select class="rang-loaders">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></li>
                        </ul>
                    </div>
                </div>
                <div class="obj-shipping obj-item-4">
                    <ul>
                        <li class="main-li sprite-time1"><span class="main-span"></span>
                            <p>Время работы</p>
                        </li>
                        <li class="range-li">
                            <div class="range"><input class="range-input" type="range"
                                                      value="0" min="1" max="10" step="0.5"
                                                      data-range="range-time"/>
                                <div class="range-bg">&nbsp;</div>
                                <div class="range-fon">&nbsp;</div>
                                <ul class="step step-2">
                                    <li><span class="zero">1</span>1.5</li>
                                    <li>2</li>
                                    <li>2,5</li>
                                    <li>3</li>
                                    <li>3,5</li>
                                    <li>4</li>
                                    <li>4,5</li>
                                    <li>5</li>
                                    <li>5,5</li>
                                    <li>6</li>
                                    <li>6,5</li>
                                    <li>7</li>
                                    <li>7,5</li>
                                    <li>8</li>
                                    <li>8,5</li>
                                    <li>9</li>
                                    <li>9,5</li>
                                    <li>10</li>
                                </ul>
                            </div>
                            <select class="rang-time">
                                <option value="1">1 час</option>
                                <option value="1.5">1.5 часа</option>
                                <option value="2">2 часа</option>
                                <option value="2.5">2.5 часа</option>
                                <option value="3">3 часа</option>
                                <option value="3.5">3.5 часа</option>
                                <option value="4">4 часа</option>
                                <option value="4.5">4.5 часа</option>
                                <option value="5">5 часов</option>
                                <option value="5.5">5.5 часов</option>
                                <option value="6">6 часов</option>
                                <option value="6.5">6.5 часов</option>
                                <option value="7">7 часов</option>
                                <option value="7.5">7.5 часов</option>
                                <option value="8">8 часов</option>
                                <option value="8.5">8.5 часов</option>
                                <option value="9">9 часов</option>
                                <option value="9.5">9.5 часов</option>
                                <option value="10">10 часов</option>
                            </select></li>
                    </ul>
                </div>
            </div>
            <div class="tabs-3" date-tabsp="tabsP" data-tabsc="tabs">
                <div class="obj-shipping obj-item-1">
                    <ul>
                        <li class="main-li sprite-cor1"><span class="main-span"></span>
                            <p>Обьект переезда</p>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon  sprite-packaging office">Переезд офиса до 40 м<sup><small>2</small></sup></span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Mercedes 1 </span> и
                                    <span class="bold-g"> 2 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">2 часа</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon sprite sprite-packaging office">Переезд офиса до 80 м<sup><small>2</small></sup></span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Mercedes 2</span> и
                                    <span class="bold-g"> 4 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">2-3 часа</span></p>
                            </div>
                        </li>
                        <li class="obj-li obj-li-active"><span
                                class="sprite-icon sprite sprite-packaging office">Переезд офиса 120 м<sup><small>2</small></sup></span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Mercedes 3</span> и
                                    <span class="bold-g"> 4 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">4 часа</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon sprite-packaging office">Переезд офиса до 200 м<sup><small>2</small></sup></span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Man </span> и <span
                                        class="bold-g"> 4 грузчика </span> <br/> Время
                                    работы - <span class="bold-g">5-6 часов</span></p>
                            </div>
                        </li>
                        <li class="obj-li"><span
                                class="sprite-icon sprite-packaging office">Переезд офиса до 990 м<sup><small>2</small></sup></span>
                            <div class="help">
                                <p>Рекомендуем <span class="bold-g">Daf </span> и <span
                                        class="bold-g"> 8 грузчиков </span> <br/> Время
                                    работы - <span class="bold-g">от 8 часов</span></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="obj-shipping obj-item-2">
                    <ul>
                        <li class="main-li sprite-tran1"><span class="main-span"></span>
                            <p>Транспорт</p>
                        </li>
                        <li class="obj-li" data-price="cart-1"><span
                                class="sprite-icon sprite-1t">Merсedes 1 <br/> 1 тонна/15 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-2"><span
                                class="sprite-icon sprite-2t">Merсedes 2 <br/> 2 тонна/20 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-3"><span
                                class="sprite-icon sprite-3t">Merсedes 3 <br/> 3 тонна/25 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-4"><span
                                class="sprite-icon sprite-5t">Man <br/> 5тонна/36 м<sup><small>3</small></sup></span>
                        </li>
                        <li class="obj-li" data-price="cart-5"><span
                                class="sprite-icon sprite-22t">Daf <br/> 22 тонны/90 м<sup><small>3</small></sup></span>
                        </li>
                    </ul>
                    <input type="checkbox" name="" id="t-3"/> <label for="t-3"> Транспорт не
                        требуется</label></div>
                <div class="obj-shipping obj-item-3">
                    <div class="item">
                        <ul>
                            <li class="main-li sprite-chel1"><span class="main-span"></span>
                                <p>Грузчики</p>
                            </li>
                            <li class="range-li">
                                <div class="range"><input class="range-input" type="range"
                                                          value="0" min="0" max="10"
                                                          step="1"
                                                          data-range="range-loaders"/>
                                    <div class="range-bg">&nbsp;</div>
                                    <div class="range-fon">&nbsp;</div>
                                    <ul class="step">
                                        <li><span class="zero">0</span>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>6</li>
                                        <li>7</li>
                                        <li>8</li>
                                        <li>9</li>
                                        <li>10</li>
                                    </ul>
                                </div>
                                <select class="rang-loaders">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></li>
                        </ul>
                    </div>
                </div>
                <div class="obj-shipping obj-item-4">
                    <ul>
                        <li class="main-li sprite-time1"><span class="main-span"></span>
                            <p>Время работы</p>
                        </li>
                        <li class="range-li">
                            <div class="range"><input class="range-input" type="range"
                                                      value="0" min="1" max="10" step="0.5"
                                                      data-range="range-time"/>
                                <div class="range-bg">&nbsp;</div>
                                <div class="range-fon">&nbsp;</div>
                                <ul class="step step-2">
                                    <li><span class="zero">1</span>1.5</li>
                                    <li>2</li>
                                    <li>2,5</li>
                                    <li>3</li>
                                    <li>3,5</li>
                                    <li>4</li>
                                    <li>4,5</li>
                                    <li>5</li>
                                    <li>5,5</li>
                                    <li>6</li>
                                    <li>6,5</li>
                                    <li>7</li>
                                    <li>7,5</li>
                                    <li>8</li>
                                    <li>8,5</li>
                                    <li>9</li>
                                    <li>9,5</li>
                                    <li>10</li>
                                </ul>
                            </div>
                            <select class="rang-time">
                                <option value="1">1 час</option>
                                <option value="1.5">1.5 часа</option>
                                <option value="2">2 часа</option>
                                <option value="2.5">2.5 часа</option>
                                <option value="3">3 часа</option>
                                <option value="3.5">3.5 часа</option>
                                <option value="4">4 часа</option>
                                <option value="4.5">4.5 часа</option>
                                <option value="5">5 часов</option>
                                <option value="5.5">5.5 часов</option>
                                <option value="6">6 часов</option>
                                <option value="6.5">6.5 часов</option>
                                <option value="7">7 часов</option>
                                <option value="7.5">7.5 часов</option>
                                <option value="8">8 часов</option>
                                <option value="8.5">8.5 часов</option>
                                <option value="9">9 часов</option>
                                <option value="9.5">9.5 часов</option>
                                <option value="10">10 часов</option>
                            </select></li>
                    </ul>
                </div>
            </div>
            <p>
                <button class="send btn-calculator" id="btn-calculator">рассчитать</button>
            </p>
        </div>
        <div class="calculation-price">
                <span
                    class="title-calculation">стоимость перевозки</span>
            <div class="calculation-body row p-3">
                <div class="total-price col-md-6"><span id="total-price"></span></div>
                <div class="info-list col-md-6">
                    <p>В стоимость входит:</p>
                    <ul>
                        <li id="car"></li>
                        <li id="total-loaders"></li>
                        <li id="total-time"></li>
                    </ul>
                </div>
            </div>
            <div class="calculation-footer">
                <p>* Данный калькулятор показывает только примерную стоимость услуги.
                    Более детальный расчет Вы можете получить по телефону</p>
            </div>
        </div>
    </div>


<?php get_footer(); ?>