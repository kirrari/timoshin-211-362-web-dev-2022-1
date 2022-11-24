// Возведение в степень
function pow(a, n) {
  let res = 1;

  for (i = 0; i < n; i++) {
    res *= a;
  }

  return res;
}

console.log(pow(3, 6));

// Нахождение НОД

function nod(x, y) {
  if (y > x) return nod(y, x);
  if (!y) return x;
  return nod(y, x % y);
}

console.log(nod(25, 100));

// Наименьшая цифра

function minNumber(a) {
  const arr = a.toString().split('');

  for (i = 0; i < arr.length; i++) {
    arr[i] = Number(arr[i]);
  }

  return Math.min(...arr);
}

console.log(minNumber(7394));

// Pluralization

function pluralization(n) {
  let start, end;

  if (n == 1) {
    start = 'В результате выполнения запроса была найдена ';
    end = ' запись';
  } else if (n % 10 == 0) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записей';
  } else if (2 <= n && n <= 4) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записи';
  } else if (5 <= n % 100 && n % 100 <= 20) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записей';
  } else if (21 <= n % 100 && n % 100 <= 99 && 5 <= n % 10 && n % 10 <= 9) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записей';
  } else if (21 <= n % 100 && n % 100 <= 99 && 2 <= n % 10 && n % 10 <= 4) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записи';
  } else if (21 <= n % 100 && n % 100 <= 99 && n % 10 == 1) {
    start = 'В результате выполнения запроса была найдена ';
    end = ' запись';
  } else if (1 <= n % 100 && n % 100 <= 9 && 2 <= n % 10 && n % 10 <= 4) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записи';
  } else if (1 <= n % 100 && n % 100 <= 9 && 5 <= n % 10 && n % 10 <= 9) {
    start = 'В результате выполнения запроса было найдено ';
    end = ' записей';
  } else if (1 <= n % 100 && n % 100 <= 9 && n % 10 == 1) {
    start = 'В результате выполнения запроса была найдена ';
    end = ' запись';
  }

  return start + n + end;
}

// Числа Фибоначчи

function fibb(n) {
  let prev = 0,
    next = 1;

  while (n > 1) {
    [prev, next] = [next, prev + next];
    n--;
  }

  return next;
}

console.log(fibb(7));
