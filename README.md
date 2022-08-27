```bash
git pull
git submodule update --init --recursive
git submodule foreach git checkout main
git submodule foreach git reset --hard HEAD
git submodule foreach git pull
```
