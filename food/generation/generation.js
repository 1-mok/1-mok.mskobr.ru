var date = new Date();
console.log('?v=' + date.getDate() + '.' + (date.getMonth() + 1) + '.' + date.getFullYear());
console.log(`?v=${date.getDate()}.${date.getMonth() + 1}.${date.getFullYear()}`);



class MenuPmok {
    constructor(day, month, year, subdivision, tableId) {
        this.day = day;
        this.month = month;
        this.year = year;
        this.subdivision = subdivision;
        this.tableId = tableId;
        this.getTable = document.getElementById(tableId);
    }
    renderTbody() {
        let result = `<tbody><tr>`;
        result += '<th>1</th>';
        result += `</tr></tbody>`;
        return result;
    }
}
MenuPmok.daysWeek = 'Пн Вт Ср Чт Пт Сб Вс'.split(' ');