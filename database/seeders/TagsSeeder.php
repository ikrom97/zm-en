<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tags = [
      'Агностицизм',
      'Агрессивность',
      'Активность',
      'Альтруизм',
      'Афоризмы',
      'Безопасность',
      'Бесконечность',
      'Бескорыстие',
      'Бессмертие',
      'Благодарность',
      'Благополучие',
      'Будущее',
      'Вдохновение',
      'Великодушие',
      'Величие человека',
      'Вера',
      'Вера в будущее',
      'Вера в себя',
      'Вера в человека',
      'Вечн Цн',
      'Вечная память',
      'Вечность',
      'Вечные вопросы',
      'Взгляд в будущее',
      'Внеземная жизнь',
      'Внутренные ресурсы человека',
      'Возможности вокруг нас ',
      'Возможность',
      'Воля',
      'Воображение',
      'Воспитание',
      'Воспитание любви к жизни',
      'Восхищение',
      'Враждебность',
      'Время',
      'Все почитаемое',
      'Вселенная и Бытие',
      'Высшая красота',
      'Высшее ',
      'Высшие чувства',
      'Гениальность',
      'Генная инженерия',
      'Глобальные проблемы',
      'Гордость',
      'Гуманизация',
      'Гуманизм',
      'Гуманитарные науки',
      'Далёкое будущее',
      'Дальновидность',
      'Дискуссия',
      'Дискуссия и полемика',
      'Добро и Зло',
      'Добродетели',
      'Доброжелательность',
      'Доброта',
      'Доказательность',
      'Достижения',
      'Достоинства',
      'Дружелюбность',
      'Духовная деградация',
      'Духовная потребность',
      'Духовность',
      'Единство',
      'Жизнелюбие',
      'Жизненная позиция',
      'Жизненная энергия',
      'Жизнерадостность',
      'Жизнестойкость',
      'Жизнь',
      'Жизнь бесценна',
      'Жизнь изумительна',
      'Жизнь прекрасна',
      'Заблуждение',
      'Заботливость',
      'Загадки Вселенной',
      'Законы развития',
      'Звёзды',
      'Здоровый образ жизни',
      'Зло',
      'Знание',
      'Идеалы',
      'Идеология',
      'Индивидуальность',
      'Интеллект и Сознание',
      'Интеллектуальное мужество',
      'Интеллектуальность',
      'Интеллектуальные добродетели',
      'Интересы',
      'Искренность',
      'Искусственный интеллект ',
      'Искусство',
      'Использование возможностей',
      'История',
      'История жизни на Земле',
      'Картина мира',
      'Качество жизни',
      'Компетентность',
      'Конкуренция ',
      'Космология',
      'Красота',
      'Креативность',
      'Критерии счастья и смысла жизни',
      'Критическое мышление',
      'Культурная эволюция',
      'Лидерство',
      'Личность',
      'Логика истории',
      'Логическое мышление',
      'Любовь',
      'Любознательность',
      'Любопытность',
      'Люди',
      'Математика',
      'Международные отношения',
      'Метафизика',
      'Мечта',
      'Милосердие',
      'Мир',
      'Мировоззрение',
      'Мироздание',
      'Миф',
      'Мораль и Этика',
      'Моральные ценности',
      'Мотивация',
      'Мудрость',
      'Мыслители',
      'Надежда',
      'Надёжное будущее',
      'Направления мысли',
      'Наслаждение',
      'Наставничество',
      'Настойчивость',
      'Наука и Пвш',
      'Научное знание',
      'Нация',
      'Начало бытия',
      'Наши мысли',
      'Невежество',
      'Невозможный мир',
      'Непреходящая жизнь',
      'Ничто',
      'Нравственность',
      'Нравственный долг',
      'Образ жизни и Жизненная позиция',
      'Образование',
      'Образованность',
      'Общество',
      'Окружение и Общение',
      'Опасности',
      'Оптимизм',
      'Основа бытия',
      'Осознанность',
      'Ответственность',
      'Открытия',
      'Открытость ума',
      'Пассивность',
      'Педагог',
      'Первопричина',
      'Позитивное мышление',
      'Позиция',
      'Познаваем ли мир',
      'Познание',
      'Политика',
      'Польноценная жизнь',
      'Понятие и Термин',
      'Популяризация науки',
      'Потенциал личности',
      'Потребности',
      'Правила жизни',
      'Правила жизни',
      'Предостережение',
      'Предпринимательство',
      'Предрассудок',
      'Прекрасное',
      'Призвание Homo sapiens',
      'Природа',
      'Природа человека',
      'Проблемы',
      'Прогресс',
      'Продуктивность',
      'Происхождение жизни',
      'Происхождение человека',
      'Просветитель',
      'Просвещение',
      'Просвещённость',
      'Профессионализм',
      'Прошлое',
      'Псевдонаука',
      'Психологическая сила',
      'Психологические ресурсы',
      'Психология личности',
      'Развитие личности',
      'Развитие общества',
      'Рациональность',
      'Религия',
      'Решение проблем',
      'Риторика',
      'Самоконтроль',
      'Самомотивация',
      'Самоотверженность',
      'Саморазвитие',
      'Самореализация',
      'Самосовершенствование',
      'Самосознание',
      'Самоуважение',
      'Самоценность человека',
      'Сверхъестественное',
      'Светлая память',
      'Свобода',
      'Свобода воли',
      'Сделать мир лучше',
      'Сердечность',
      'Сила воли',
      'Слабость',
      'Слава',
      'Слово, сила слова',
      'Сложные явления',
      'Служение',
      'Смысл жизни',
      'Совесть',
      'Современность, ный',
      'Создание будущего',
      'Созидание',
      'Сознание',
      'Сознание',
      'Солидарность',
      'Сострадание',
      'Социальная среда',
      'Сочувствие',
      'Способности',
      'Способность человека',
      'Старость',
      'Структура личности',
      'Субстанция',
      'Счастье',
      'Тайны мироздания',
      'Талант',
      'Творчество',
      'Телеология',
      'Терпение',
      'Технология',
      'Толерантность',
      'Традиции и Обычаи',
      'Трудолюбие',
      'Тщеславие',
      'Уважение',
      'Уверенность в себе',
      'Увидеть прекрасное',
      'Удивление',
      'Умение задавать вопросы',
      'Управленческие навыки',
      'Уроки из ошибок',
      'Успех',
      'Участие',
      'Ученные и мыслители',
      'Учитель',
      'Уют и Комфорт',
      'Физика',
      'Философия',
      'Философские чувства',
      'Футурология',
      'Хозяин судьбы',
      'Цели человека',
      'Цель мироздания',
      'Ценности и идеалы',
      'Ценность жизни',
      'Цивилизация',
      'Цитаты',
      'Человек',
      'Человек будущего',
      'Человек как духовное существо',
      'Человеколюбие',
      'Человечество',
      'Человечность',
      'Черты характера',
      'Честность',
      'Чувства и Эмоции',
      'Чудо',
      'Щедрость',
      'Эволюция жизни',
      'Эгоизм',
      'Эмоциональный интеллект',
      'Эмпатия',
      'Энтузиазм',
      'Эрудиция',
      'Эстетика',
      'Эстетическое наслаждение',
      'Этика',
      'Этика человечности',
      'Эффективность',
      'Юмор и Ирония',
    ];

    foreach ($tags as $tag) {
      Tag::create(['title' => $tag]);
    }
  }
}
