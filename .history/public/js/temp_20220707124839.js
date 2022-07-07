let nums = [6, 7, 5,3,8];
let result = false;

for (let i = 0; i < nums.length; i++) {
  for (let j = 0; j < nums.length; j++) {
    if (j != i) {
      //console.log("i : ", i, " ", nums[i]);
      //console.log("j : ", j, " ", nums[j]);
      if (nums[j] == nums[i]) {
          result = true;
          break;
      }
    }
  }
}
console.log(result);

let hashset = [];
let bool = false
nums.forEach(el => {
  console.log(el);
  if (hashset.includes(el)) {
    bool = true;
  } else {
    hashset.push(el);
  } 
  
});
console.log(bobool);