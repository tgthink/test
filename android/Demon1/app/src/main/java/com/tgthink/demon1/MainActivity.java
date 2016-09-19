package com.tgthink.demon1;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //将布局xml文件引入到activity当中
        setContentView(R.layout.activity_main);
    }
}
