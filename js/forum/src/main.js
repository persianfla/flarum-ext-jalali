import app from 'flarum/app';
import { override } from 'flarum/extend';

app.initializers.add('sijad-jalali', () => {
  const formatsMap = {
    'D MMM': 'jD jMMMM',
    'MMM \'YY': 'jYYYY jMMMM',
    'MMMM YYYY': 'jYYYY jMMMM',
  };

  moment.loadPersian({dialect: 'persian-modern'});
  override(moment.fn, 'format', function(original, inputString) {
    const format = formatsMap[inputString] || inputString;
    return original.call(this, format);
  });
});
